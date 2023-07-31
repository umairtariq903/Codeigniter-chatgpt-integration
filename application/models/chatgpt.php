<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Orhanerday\OpenAi\OpenAi;

class chatgpt extends CI_Model {

        
        public function chatApi($userQuery)
        {
                
                $open_ai_key = 'dummy';
                
                $open_ai = new OpenAi($open_ai_key);

                $question = ["role" => "user","content" => $userQuery];
                       
                $chat = $open_ai->chat([
                   'model' => 'gpt-3.5-turbo',
                   'messages' => [$question],
                   'temperature' => 1.0,
                   'max_tokens' => 4000,
                   'frequency_penalty' => 0,
                   'presence_penalty' => 0,
                ]);
                $d = json_decode($chat);
                // Get Content
                return $d->choices[0]->message->content;
        }


}