## Singleton
 Padrão de Projeto com PHP
````
````
### Definição:

Singleton é um padrão de projeto de software. Ele permite que uma determinada classe seja instanciada uma única vez durante todo tempo de execução de um programa. A classe gerencia sua própria instância e evita que outras classes a instanciem. Ele é considerado um Padrão de projeto de criação. Muito usado em Drivers que necessitam de um único ponto de acesso global para seus recursos.

### Pontos

> ###### Positivos:
-   Por permitir trabalhar com polimorfismo garante maior flexibilidade do que métodos estáticos.
-   Permite que com uma implementação interna crie um número máximo de instâncias.
-   Permite controle sobre como e quando as instâncias podem ser usadas ou criadas.
-   Pode-se definir uma interface padrão para múltiplas aplicações com Singleton, desta forma podemos selecionar qual utilizar em tempo de execução.

> ###### Negativos:
 - Anti-Padrões para muitos programadores.
 - Reversão difícil.
 - Mais complexidade nos testes.
 - Pode ser facilmente quebrado.


