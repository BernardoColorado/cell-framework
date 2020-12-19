<?php 

namespace Core\Tools;

use PHPMailer\PHPMailer\PHPMailer as Mailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailBuilder{

  protected $mail;
  protected $adress;
  protected $password;
  protected $alias;
  protected $receivers =[];
  protected $withCopy=[];
  protected $withHiddenCopy=[];
  protected $files = [];
  protected $subject;
  protected $dir;
  protected $errors=[];

  public function __construct(string $adress,string $password,string $alias, string $dir=null){
    
    $this->setMailer($adress,$password,$alias,$dir);

  }

  public function setMailer(string $adress,string $password,string $alias, string $dir=null){

    $this->mail = new Mailer(true);
    $this->adress=$adress;
    $this->password=$password;
    $this->alias=$alias;
    $this->dir=$dir;
    
  }

  public function setReceivers(array $receivers,array $withCopy=[],array $withHiddenCopy=[]):void{

    $this->receivers=$receivers;
    $this->withCopy=$withCopy;
    $this->withHiddenCopy=$withHiddenCopy;

  }

  public function setFiles(array $files=[]):void{
  
    $this->files=$files;
  
  }

  public function setSubject(string $subject):void{
  
    $this->subject=$subject;
  
  }

  public function setMessage(string $message):void{
  
    $this->message=$message;
  
  }

  public function create():Mailer{

    //configuracion de email
    $this->mail->SMTPDebug = 0;                                       
    $this->mail->isSMTP();                                           
    $this->mail->Host       = 'smtp.gmail.com';
    $this->mail->SMTPAuth   = true;                  
    $this->mail->Username   = $this->adress;
    $this->mail->Password   = $this->password;
    $this->mail->SMTPSecure = 'ttl';
    $this->mail->Port       = 587;
    $this->mail->setFrom($this->adress,$this->alias);

    //agregamos receptores
    foreach ($this->receivers as $receiver) {
      $this->mail->addAddress($receiver);    
    }

    //agregamos con copia
    foreach ($this->withCopy as $wc) {
      $this->mail->addCC($wc);    
    }

    //agregamos copia oculta
    foreach ($this->withHiddenCopy as $whc) {
      $this->mail->addBCC($whc);    
    }

    //agregamos archivos
    foreach ($this->files as $file) {
      $this->mail->addAttachment($this->dir.'/'.strval($file)); 
    }

    //configuracion de mensaje
    $this->mail->isHTML(true);
    $this->mail->Subject = $this->subject;
    $this->mail->Body    = $this->message;
    $this->mail->AltBody = 'default';

    return $this->mail;

  }

}