<?php 

namespace App\src\Service;

use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
class MailerService
{
    public function __construct(private MailerInterface $mailer){}
    
        public function sendEmail($to,$html): void
        {
            $email=(new Email())
            ->from("prof.dev64@gmail.com")
            ->to($to)
            ->subject('votre nouveau compte a été cree ')
            ->html($html);
            $this->mailer->send($email);
            
        }
    
}