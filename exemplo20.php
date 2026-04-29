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
