#Amanda Maria Pinheiro 
#Programação e Algoritmos 
#1º DS 
#Última atualização: 05/06/2020
#Formatação de saída de dados com Pyton - método format()

print('***Programa para calcular a média aritmética de notas de um aluno***')

nome = input('Digite o nome do aluno: ') 
nota1 = float(input('Digite a primeira nota: '))
nota2 = float(input('Digite a segunda nota: '))

media = (nota1 + nota2)/2 

#print(nome, 'sua média é igual a: ' , media) 

print('{0} sua média é igual a: {1:.2f}' . format(nome, media))
