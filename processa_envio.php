<?php // Início do script PHP.



// Definição da classe "Mensagem", que encapsula os dados de uma mensagem (destinatário, assunto e corpo da mensagem).
class Mensagem {
    
    // Propriedades privadas da classe. Elas só podem ser acessadas diretamente dentro da própria classe.
    private $para = NULL; 
    private $assunto = NULL; 
    private $mensagem = NULL;

    // Método mágico __get é utilizado para acessar propriedades privadas de fora da classe.
    public function __get($atributo){
        return $this->$atributo; // Retorna o valor do atributo solicitado.
    }

    // Método mágico __set é utilizado para atribuir valores a propriedades privadas de fora da classe.
    public function __set($atributo, $valor){
        $this->$atributo = $valor; // Atribui o valor passado ao atributo solicitado.
    }

    
    public function mensagemValida(){
        // para verificar se a mensagem está completa ou válida
        if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
            return false;
        }
        return true;
    
    }
    

}

// Cria um novo objeto da classe "Mensagem".
$mensagem = new Mensagem();

// Atribui o valor do campo 'para' enviado via POST ao atributo 'para' da instância de "Mensagem".
$mensagem -> __set('para', $_POST['para']);

// Atribui o valor do campo 'assunto' enviado via POST ao atributo 'assunto' da instância de "Mensagem".
$mensagem -> __set('assunto', $_POST['assunto']);

// Atribui o valor do campo 'mensagem' enviado via POST ao atributo 'mensagem' da instância de "Mensagem".
$mensagem -> __set('mensagem', $_POST['mensagem']); 

//print_r($mensagem);

if ($mensagem -> mensagemValida()) {
    echo 'mensagem valida';
}else{
    echo 'nn valida';
}