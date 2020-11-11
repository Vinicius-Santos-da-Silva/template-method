# Template Method Design Pattern

O Template Method é um padrão de projeto comportamental que define o esqueleto de um algoritmo na superclasse mas deixa as subclasses sobrescreverem etapas específicas do algoritmo sem modificar sua estrutura.

![Template Method](https://refactoring.guru/images/patterns/content/template-method/template-method.png)
	
### Quando usar Template Method? 🤔

Para implementar partes invariantes de um algoritmo uma única vez e deixar subclasses implementarem o comportamento variável.

Quando comportamento comum entre subclasses deveria ser fatorado e localizado numa classe comum para evitar duplicação. 

Para controlar extensões de subclasses.


### Como usar Template Method? 
O Template Method sugere que seja utilizada uma Classe Abstrata que declara um método principal e os metodos auxiliares que podem ser abstratos ou terem alguma implementação que são utilizados pelo método principal. E também por subclasses (Classes Concretas), que devem implementar os métodos abstratos.


###  Analogia com o mundo real?

Imagine que você está desenvolvendo uma aplicação para para postagem automática de conteúdos em redes sociais, como por exemplo o Facebook e Twitter.

Ambas integrações possuem etapas semelhantes, ou até mesmo iguais para executarem o processo de postagem, entretanto, as regras de implementação são diferentes. Para este caso, poderia ser utilizado o Pattern Template Method. 


### Referência:
[![Referencia](imgs/refactoring_guru.png "Refactoring Guru")](https://refactoring.guru/design-patterns/composite)

Da uma olhada na fonte original 😉