#Amanda Maria Pinheiro 
#Programação e Algoritmos 
#1º DS 
#Última atualização: 10/06/2020
#Estrutura de decisão if-else 

print("Algoritmo para verificar a média de duas notas") 

nota1 = float(input("Digite a 1ª nota:")) 
nota2 = float(input("Digite a 2ª nota:"))

media = (nota1 + nota2)/2 

print("A média das notas é:" , media) 


#verificando a situação da média 

if media >= 7: 
    print("Aprovado!!") 
    print("Sua média é: {0:4.2f}".format(media))
else: 
    print("Reprovado!") 
    print("Sua média é: {0:4.2f}".format(media))
