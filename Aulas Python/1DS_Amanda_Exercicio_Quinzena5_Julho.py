#Amanda Maria Pinheiro 
#Programação e Algoritmos 
#1º DS 
#Última atualização: 10/07/2020
#Atividade referente a Quinzena 5 (julho) 

#Faça um Programa que mostre a mensagem "ETEC - LEME" na tela.
print("ETEC - LEME")


#Faça um Programa que peça dois números e imprima a soma.
n1=float(input("Digite um número qualquer:")) 
n2=float(input("Digite um segundo número qualquer:")) 

soma = n1 + n2 

print("A soma dos números {0} e {1} é igual a: {2: .2f}" .format(n1, n2, soma))


#Faça um Programa que peça um valor e mostre na tela se o valor é positivo ou negativo.
num=float(input("Digite um número:")) 

if num >= 0: 
    print("Esse número é positivo!") 
else: 
    print("Esse número é negativo!")


#Faça um Programa que seja solicitado em que período você trabalha. 
#As entradas de dados serão: M-matutino, V-Vespertino ou N- Noturno. 
#Imprima a mensagem "Bom Dia!", "Boa Tarde!" ou "Boa Noite!", de acordo com a entrada de dados.
per=input("Digite o período em que trabalha (M-matutino, V-vespertino ou N-noturno):")  

if per == 'M' or per == 'm': 
    print("Bom dia!")
elif per == 'V' or per == 'v': 
    print("Boa tarde!") 
elif per == 'N' or per == 'n': 
    print("Boa noite!")
else:
    print("Opção inválida!") 

if per == 'M' or per == 'm' or per == 'V' or per == 'v' or per == 'N' or per == 'n':
    print("Bom trabalho!!!")