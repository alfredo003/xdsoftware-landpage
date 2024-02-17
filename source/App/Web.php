<?php

namespace Source\App;
use Source\Core\Controller;
use Source\Support\Email;
use Source\Models\Lead;
/**
 * Web Controller
 * @package Source\App
 */
class Web extends Controller
{
    /** 
     * Web constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
      
    }

    /**
     * SITE HOME
     */
    public function home(?array $data): void
    {
           
    if (!empty($data['csrf'])) {
        if (!csrf_verify($data)) {
            $json['message'] = $this->message->error("Erro ao enviar, favor use o formulário")->render();
            echo json_encode($json);
            return;
        }
        if (in_array("", $data)) {
            $json['message'] = $this->message->info("Informe seus dados para criar sua conta.")->render();
            echo json_encode($json);
            return;
        }

        $lead = (new Lead());
        $lead->name = $data['name'];
        $lead->tel = $data['tel'];
        $lead->company = $data['company']; 



        if (!$lead->save()) {
            $json['message'] = $this->message->error("Erro ao fazer a postagem..!")->render();
            echo json_encode($json);
            return;
        }else{
            $json['redirect'] = url("/");
            echo json_encode($json);
            return;
        }
    }

        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        ); 

        echo $this->view->render("home", [
            "head" => $head
        ]);
    }
   
    
    /**
     * SEND EMAIL
     */
    public function sendEmail(?array $data): void
    {
        
        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        ); 

        echo $this->view->render("list", [
            "head" => $head,
            "leads"=> (new Lead())->find()->fetch(true)
        ]);
    }
}