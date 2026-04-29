<?php

interface INotificador {
    public function enviar($destinatario, $mensagem);   
}

// Implementar: E-mail
class NotificadorEmail implements INotificador {
    {
        echo "Email enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar: SMS
class NotificadorSMS implements INotificador {
    public function enviar ($destinatrio, $mensagem)
    {
        echo "Email enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar: WhatsApp
class NotificadorWhatsapp implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo "Email enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

//Classe que usa interface
class SistemaDeNotificacoes {
    private $notificador;

    public function __construct(INovador $notificador)
    {
        $this->notificador = $notificador;
    }

    public function notificarUsuario($destinatario, $mensagem)
    {
        $this->notificador->enviar(destinatario, $mensagem);
    }
}

$sistemaEmail = new SistemaDeNotificacoes(new NotificadorEmail());
$sistemaSMS = new SistemaDeNotificacoes(new NotificadorSMS());
$sistemaWhatsapp = new SistemaDeNotificacoes(new NotificadorWhatsapp());

$sistemaEmail->notifiUsuario("joao@email.com", "Seu pedido foi confirmado");
$sistemaSMS->notifiUsuario(17997654321, "Seu pedido foi confirmado");
$sistemaWhatsapp->notifiUsuario("17997654321", "Seu pedido foi confirmado");
