#Amanda Maria Pinheiro 
#Programação e Algoritmos 
#1º DS 
#Última atualização: 05/06/2020
#Estrutura condicional IF

print('Programa para calcular se uma pessoa pode votar, com base em sua idade informada')

nome = input('Digite o nome da pessoa: ')
anonasc = int(input('Digite o ano de nascimento: '))
anoatual = int(input('Digite o ano atual: '))

idade = anoatual - anonasc 

if idade > 16: 
    print(nome , 'está apto para votar!')
    