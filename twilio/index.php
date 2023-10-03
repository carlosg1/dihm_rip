<?php

require 'vendor/autoload.php'; // Carga la biblioteca de Twilio

class WhatsAppSender {
    private $sid;
    private $token;
    private $twilioPhoneNumber;

    public function __construct($sid, $token, $twilioPhoneNumber) {
        $this->sid = $sid;
        $this->token = $token;
        $this->twilioPhoneNumber = $twilioPhoneNumber;
    }

    public function sendWhatsAppMessage($to, $message, $mediaUrl = null) {
        $twilio = new Twilio\Rest\Client($this->sid, $this->token);

        try {
            $messageOptions = array(
                'from' => 'whatsapp:' . $this->twilioPhoneNumber,
                'body' => $message
            );

            if ($mediaUrl) {
                $messageOptions['mediaUrl'] = $mediaUrl;
            }

            $message = $twilio->messages->create('whatsapp:' . $to, $messageOptions);

            return $message->sid;
        } catch (Exception $e) {
            return false;
        }
    }
}

// Ejemplo de uso:
$sid = 'TU_SID'; // Reemplaza con tu SID de Twilio
$token = 'TU_TOKEN'; // Reemplaza con tu Token de Twilio
$twilioPhoneNumber = 'TU_NUMERO_DE_TWILIO'; // Reemplaza con tu número de Twilio

$whatsAppSender = new WhatsAppSender($sid, $token, $twilioPhoneNumber);

$to = 'whatsapp:+1234567890'; // Reemplaza con el número de WhatsApp al que deseas enviar el mensaje
$message = 'Hola, esto es un mensaje de prueba desde PHP.';
$mediaUrl = 'URL_DE_LA_IMAGEN'; // Opcional: en caso de enviar una imagen

$result = $whatsAppSender->sendWhatsAppMessage($to, $message, $mediaUrl);

if ($result) {
    echo "Mensaje enviado correctamente. SID: $result";
} else {
    echo "Error al enviar el mensaje.";
}
