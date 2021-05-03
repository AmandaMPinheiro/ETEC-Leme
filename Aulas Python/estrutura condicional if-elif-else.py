#Amanda Maria Pinheiro 
#Programação e Algoritmos 
#1º DS 
#Última atualização: 10/06/2020
#Estrutura condicional if-elif-else 

print("Algoritmo para verificar a média de duas notas") 

nota1 = float(input("Digite a 1ª nota:")) 
nota2 = float(input("Digite a 2ª nota:"))

media = (nota1 + nota2)/2 

print("A média das notas é:" , media) 


#verificando a situação da média 

if media >= 7: 
    print("Você foi aprovado com média = {0:4.2f}".format(media))
elif media < 7 and media >= 3:
    print("Você vai para prova final com média = {0:4.2f}".format(media))
else:  
    print("Você foi reprovado com média = {0:4.2f}".format(media)) 

print("Etec")