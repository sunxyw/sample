<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPassword extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('重置密码')
            ->line('这是一封密码重置邮件，如果是您本人操作，请点击以下按钮继续：')
            ->action('重置密码', url(route('password.reset', $this->token, false)))
            ->line('如果您并没有执行此操作，您可以选择忽略此邮件。');
    }
}