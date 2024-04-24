# Princípios do SOLID

## SRP - Single Responsibility Principle

### Uma classe deve ter apenas um motivo para mudar, ou em outras palavras, uam classe deve ter uma e apenas uma responsabilidade.

### Prática

#### Cenário Inicial (app_carrinho_compras)

![alt text](resources/image-2.png)

> Inicialmente foi apenas estruturado o projeto e codificado o projeto.<br>
> Nesse momento o projeto foi criado a classe CarrinhoCompra sem os princípios da SRP.<br>
> A classe possui 4 responsabilidades diferentes.<br>
>> Carrinho de compras é o que é esperado para a classe<br>
>> Os itens estão sendo estruturados internamente pela propria classe CarrinhoCompra.<br>
>> A classe também controla a confirmação do pedido.<br>
>> E também a classe assume a responsabilidade pelo envio de e-mails.<br>
>>> Se a classe assume essa responsabilidade, perde-se a oportunidade de reuso em outros ponto da aplicação. Afinal não faz sentido precisar instanciar a classe CarrinhoCompra apenas para aproveitar o método enviarEmailConfirmacao().<br>
> O carregamento de diversas responsabiliades pela classe CarrinhoCompra dificulta as manutenções futuras e também dificulda a implementação de testes unitários ou automatizados.<br>

#### Cenário Ideal (app_carrinho_compras_b)

![alt text](resources/image-3.png)

> Inicialmente, há o sentimento de que foram criadas várias classes desnecessárias, e que as funcionalidades poderiam estar todas presentes em uma única classe como feito anteriormente.<br>
> Foi feita a refatoração do projeto Carrinho de Compras, levando em consideração os princípios da responsabilidade única, onde as classes devem ter uma, e apenas uma, responsibilidade.<br>
> Nesse processo foram criadas várias classes para resolver o mesmo problema. 
>> Para que cada classe tenha uma responsabilidade única para atender a uma necessidade de negócio dentro do sistema.<br>


## OCP - Open/Closed Principle

### O que é uma alteração de código

> Ocorro quando precisamos acessar uma classe já existente para incluir ou modificar comportamentos, ou para incluir ou modificar métodos da classe.

### O que é uma expansão de código

> Requer uma conduta de abstração mais sofisticada no momento em que a classe está sendo implementada. Ou seja, é necessário pensar em como as classes poderão ser extendidads, de modo que, quando um novo comportamento seja necessário, que a classe já existente seja extendida ao invés de modificada.

### Observação

> O OCP é tido como o princípio mais polêmioco e pouco praticado do SOLID, por ser complexo de ser entendido, e consequentemente de ser utilizado no dia-a-dia.

### Prática

#### Cenário Inicial (app_etl)

![alt text](resources/image.png)

> Analisando a conduta de como foi implementado o projeto ETL. A aplicação recupera informação diversas fontes e transforma essas informações com o propósito de retorná-las em alguma saída.<br>
> Foram criadas classes chamadas Leitor e Arquivo, com responsabilidades únicas para atender aos princípios do SRP.<br>
> No início do projeto sabíamos que a aplicação seria responsável por ler informações de diversas origiem.<br>
> Quando foi implementado o primeiro o primeiro fluxo de leitura de arquivo CSV, foi criado a classe Leitor, com o método lerArquivo() e a classe Arquivo com o método lerArquivoCSV().<br>
> Na sequencia, surgiu a necessidade de extender a aplicação, com a leitura de arquivos TXT e então foi criado o método lerArquivoTXT() na classe Arquivo.<br>
> Foi necessário acessar a classe Leitor para modificá-la e também necessário alterar a classe Arquivo para implementar um novo método.<br>
> Porém ao invés de ser implementado uma técnica de expansão, foram realizadas alterações no código, o que fere o princípio de Fechado para Alteração/Aberto para Expansão.<br>
> Embora as alterações atendam as necessidades, caso a aplicação cresça, por exemplo com a leitrua de arquivos SOAP ou XLSX.<br>
>> A ideia do princípio, em situações como o crescimento da aplicação, é pensar em como podemos implementar técnicas de expansão, sem que as classes pré-existentes sejam alteradas ou sofram modificações.<br>

#### Cenário Ideal (app_etl_b)

![alt text](resources/image-4.png)

> Sempre quando um código for agregado a uma aplicação, que essa agregação seja feita através de uma extensão e não de uma alteração em código já existente.<br>
> Na prática é necessário alterar os códigos para que eles se tornem cada vez mais extensíveis.
> O conceito desse princípio é que, sempre que formos abstrair classes, que elas possuam características de extensibilidade, ao invés de precisar voltar em códigos pré-existentes para serem ajustados.<br>
>> Para isso foi feito a refatoração do projeto ETL. Anteriormente o projeto possuia as classes Leitor e Arquivo, embora tendo responsabildiades únicas, sempre que um método de leitura precisasse ser implementado, seria necessário modificar ambas as classes, o que fere o princípio Open Closed.<br>
>> Foi substituíodo a classe Arquivo por classes específicas, de TXT e CSV e ajustado a classe Leitor para adotar a metodologia de extensão de potenciais novos recursos.<br>

## LSP - Liskov Substitution Principle

## ISP - Interface Segregation Principle

## DIP - Dependency Inversion Principle