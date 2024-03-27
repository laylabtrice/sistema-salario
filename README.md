# Calculadora de Salário de Vendedor
 
Este é um sistema desenvolvido em PHP para calcular o salário de um vendedor com base em metas semanais e mensais e as suas vendas realizadas dentro desse período.
 
## Índice
 
1. [Funcionalidades](#funcionalidades)
2. [Como usar](#como-usar)
3. [Explicação de código.](#explicação-de-código)
4. [Tela](#tela)
5. [Como funciona](#como-funciona)
6. [Estrutura de arquivos](#estrutura-de-arquivos)
7. [Tecnologias utilizadas](#tecnologias-utilizadas)
8. [Fontes](#fontes)
9. [Autor](#autor)
 
## Funcionalidades  
 Solicita o nome do vendedor, a metas e vendas semanais (4 semanas) e a meta e venda total mensal.    
## Calcula o salário final do vendedor com base nas seguintes regras:
- Todo vendedor tem um salário mínimo definido;
- Todo vendedor tem uma meta de venda semanal e mensal;
- Todo vendedor tem suas vendas feitas por semana e ao mês;
- Se o vendedor ultrapassar a meta semanal, ele recebe um percentual sobre o excedente;
- Se o vendedor ultrapassar a meta mensal, ele recebe uma bonificação sobre o excedente;
- Caso o vendedor não bata ao menos uma meta semanal, ele perde o direito à bonificação sobre o excedente mensal.

## Como funciona  

1. O usuário abre o arquivo `index.php` em um navegador web.
2. O sistema exibe um formulário onde o usuário insere o nome do vendedor, a meta semanal e a meta mensal.
3. Após preencher os dados, o usuário clica no botão "Calcular Salário".
4. O sistema utiliza a lógica implementada em PHP para calcular o salário final do vendedor com base nas metas fornecidas.
5. Se o vendedor ultrapassar a meta semanal, o sistema calcula um percentual sobre o excedente e adiciona ao salário final.
6. Se o vendedor ultrapassar a meta mensal, o sistema calcula uma bonificação sobre o excedente e adiciona ao salário final, desde que tenha alcançado pelo menos uma meta semanal.
7. Caso o vendedor não atinja ao menos uma meta semanal, ele perde o direito à bonificação sobre o excedente mensal.
8. O sistema exibe o salário final calculado na página.
  
## Explicação de código.  
### PHP
  
1.
Define metas semanais, meta mensal e vendas nesse período.
![Definir metas e vendas semana-mes](https://github.com/laylabtrice/sistema-salario/blob/main/Captura%20de%20tela%202024-03-27%20113102.png)  
  
2.
Define salário minímo para vendedor, porcentagem de lucro caso excedente e os valores 'venda' para calculo.
![Definir para calculo](https://github.com/laylabtrice/sistema-salario/blob/main/Captura%20de%20tela%202024-03-27%20113542.png)
  
3.
Calcula salário por vendedor com base nos resultados dos dados de venda e metas (Se realizadas).
![Calcula salário](https://github.com/laylabtrice/sistema-salario/blob/main/Captura%20de%20tela%202024-03-27%20114206.png)
  
4.
Mostra resultado de salário com nome do vendedor.
![Resultado de Salário](https://github.com/laylabtrice/sistema-salario/blob/main/Captura%20de%20tela%202024-03-27%20114738.png)
  
## Como usar  
 
1. Abra o arquivo `index.php` em um navegador via web.
2. Preencha o nome do vendedor, a meta e vendas semanais e a meta e venda total mensal nos campos fornecidos.
3. Clique no botão inferior para gerar o resultado relativo ao valor do salário.
4. O sistema irá calcular o salário final do vendedor e exibir na página.

## Tela

![Tela](https://github.com/laylabtrice/sistema-salario/blob/main/Captura%20de%20tela%202024-03-27%20090222.png)
  
## Estrutura de arquivos  
 
- `index.php`: Página principal do sistema que contém o formulário para inserir os dados do vendedor e exibir o resultado do cálculo do salário.
- `style.css`: Arquivo CSS para estilizar a página (frontend).
- `README.md`:  Informações sobre o sistema, como usa-lo e o que ele pode realizar.
 
## Tecnologias utilizadas  
 
- **PHP**: Linguagem de programação usada para criar a lógica de cálculo do salário do vendedor.
- **HTML**: Linguagem de marcação utilizada para criar a estrutura do formulário e da página.
- **CSS**: Utilizado para estilizar a página e proporcionar uma melhor experiência de usuário

## Fontes  

- [Salário vendedor](https://www.aen.pr.gov.br/Noticia/Maior-do-Brasil-governador-confirma-novo-Piso-Regional-que-vai-de-R-18-mil-R-21-mil#:~:text=Na%20primeira%2C%20que%20contempla%20os,de%20R%24%201.927%2C02)
- [Base para formuário](https://www.devmedia.com.br/customizando-formularios-com-css/37212)
- [Inserir imagens](https://github.com/orgs/community/discussions/66495)
 
## Autor  

Este projeto foi desenvolvido por- [@Layla Beatrice](https://www.github.com/laylabtrice)
* [Linkedin](https://www.linkedin.com/in/layla-beatrice-a89a352ba/)
