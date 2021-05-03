#Amanda Maria Pinheiro 
#Programação e Algoritmos 
#1º DS 
#Última atualização: 01/07/2020
#Estrutura de repetição for - exemplo 3 - TABUADA

#exemplo com o timpo int, sendo possível somente números inteiros: 
numero=int(input("Informe um número inteiro para a tabuada:"))

for i in range(0, 11):
    print(numero, "x", i, "=", numero*i) 
print("Parabéns!!")


#exemplo com o tipo float, permitindo números decimais:
#numero=float(input("Informe um número para a tabuada:"))
#for i in range(0, 11):
#    print(numero, "x", i, "=", numero*i) 
