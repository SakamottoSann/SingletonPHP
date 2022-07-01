<?php
// classe de exemplo de logs
class SingletonLogs
{
    private static $singletonLogs; // atributo statico que armazena a instancia da propria classe

    private function __construct()
    {
    } // metodo construtor definido como privado
    private function __wakeup()
    {
    } // metodo privado para garantir que a classe não seja instanciada de fora
    private function __clone()
    {
    } // metodo privado para garantir que a classe não seja instanciada de fora


    // metodo publico que gerencia se deve ou não instanciar uma nova classe
    public static function getInstance()
    {
        //Quando a classe é carregada o metodo singletonLogs é defindo por padrao como nulo aqui fazemos a verificaçao, 
        // se ele for nulo, setamos ele como uma nova instancia.
        if (self::$singletonLogs === null) {
            self::$singletonLogs = new SingletonLogs();
            echo 'Nova instancia da classe SingletonLogs<br>';
        } else {
            echo 'A classe já instanciada!<br>';
        }
        // Aqui nós retornamos essa instancia
        return self::$singletonLogs;

        //OBS: Caso ele ja tenha sido instanciado, não passa pelo if e retorna a propria instancia!
    }
}
// Client de teste
class Client
{
    public function __construct()
    {
        // Forma tradicional utilizando new que se utilizado retona erro Informado que o construtor é privado.
        $test = new SingletonLogs(); 
        
        // Chamando metodo que deve retornar a instacia da classe.
        $test = SingletonLogs::getInstance();

        // Chamando novamente o metodo, desta vez a classe ja deve ter sido instaciada. ou se ela só é retornada.
        $test2 = SingletonLogs::getInstance();
        $test3 = SingletonLogs::getInstance();
    }
}

$client = new Client();
