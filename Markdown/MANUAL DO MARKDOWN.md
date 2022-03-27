# MANUAL DO MARKDOWN
<a id="menu"></a>

# Índice
* Como editar?
* [Titulação](#menu_titulacao);
* [Texto comum](#menu_textocomum);
* [Negrito](#menu_negrito);
* [Itálico](#menu_italico);
* [Links](#menu_links);
    * [Link direto](#menu_linkd);
    * [Link com texto](#menu_linkt);
* [Citações](#menu_citacao);
* [Código](#menu_codigo);
    * [Linha de código](#menu_codigol);
    * [Bloco de código](#menu_codigob);
* [Listas](#menu_list);
    * [Normal](#menu_listn);
    * [Oredenadas](#menu_listo);
* [Tabelas](#menu_tabela);


<a id="menu_titulacao"></a>
# TITULAÇÃO

# Título 1 
## Título 2
### Título 3
#### Título 4
##### Título 5

```
# Título 1
## Título 2
### Título 3
#### Título 4
##### Título 5
```
[volta ao menu](#menu)



<a id="menu_textocomum"></a>
# Texto comum 
Para texto comum não é necessário nenhum caracter.

[volta ao menu](#menu)



<a id="menu_negrito"></a>
# Negrito 

Para negrito, utiliza-se dois "*" (asteríscos) ou "_"(underscore).

~~~
**negrito** ou __negrito__
~~~
[volta ao menu](#menu)


<a id="menu_italico"></a>
# Itálico 

Para itálico, utiliza-se um "*" (asterísco) ou "_"(underscore).

~~~
*itálico* ou _itálico_
~~~
[volta ao menu](#menu)



<a id="menu_links"></a>
# Link's 

Existem duas formas de escrever um link com o Markdown. Link direto e link com texto:


<a id="menu_linkd"></a>
#### Link direto

<https://www.google.com.br>
~~~
<https://www.google.com.br>
~~~


<a id="menu_linkt"></a>
#### Link com texto

[Google](http://google.com.br)
~~~
[Google](http://google.com.br)
~~~

[volta ao menu](#menu)


<a id="menu_list"></a>
# Listas 

Usam-se o "*" (asterísco) ou no caso das listas ordenadas, "número." número acompanhado do ponto á direita.
 
<a id="menu_listn"></a>
#### Lista normal

* Ítem
* Ítem
* Ítem
* Ítem
* Ítem

```
* Ítem
* Ítem
* Ítem
* Ítem
* Ítem
```

<a id="menu_listno"></a>
#### Listas ordenadas

1. Primeiro ítem
2. Segundo ítem
3. Terceiro ítem
4. Quarto ítem
5. Quinto ítem

```
1. Primeiro ítem
2. Segundo ítem
3. Terceiro ítem
4. Quarto ítem
5. Quinto ítem
```
[volta ao menu](#menu)


<a id="menu_citacao"></a>
# Citações

Para escrever uma citação, basta colocar o caracter ">" no início da linha.

> Essa é uma citação.

```
> Essa é uma citação.
```
[volta ao menu](#menu)


<a id="menu_codigo"></a>
# Bloco de código

<a id="menu_codigol"></a>
#### Código em linha

O código em uma linha só é estilizado com "`" (acento agudo) no início e no fim da linha.

~~~
`Linha de código` 
~~~

<a id="menu_codigob"></a>
#### Código em bloco

O Bloco de código é delimitado por três "~~~" (tils) no início e no fim do bloco.

```
Esse é um
Exemplo de
Bloco de Código
```

<pre>
~~~ ou ```
Esse é um
Exemplo de
Bloco de Código
~~~ ou ```
</pre>
[volta ao menu](#menu)


<a id="menu_tabela"></a>
# Tabelas

N  | Descição      | Quantidade |
:-:|:------------: | :---------:|
1  | Item 1        | Muitos     |
2  | Item 2        | Vários     |

[volta ao menu](#menu)
