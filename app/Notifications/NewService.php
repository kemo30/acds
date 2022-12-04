<?php

namespace App\Notifications;

use App\Models\Admin;
use App\Models\service;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewService extends Notification
{
    use Queueable;



    protected $service;
    protected $admin;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(service $service,Admin $admin)
    {
        $this->service = $service;
        $this->admin = $admin;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }
    
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
       
        $body = sprintf('%s Add new Service %s',
        $this->admin->name,
        $this->service->name_en );
   
        return [
            'titel' => 'new service add',
            'body' => $body,
            'url' => route('services.edit',$this->service->id),
        ];
    }
}