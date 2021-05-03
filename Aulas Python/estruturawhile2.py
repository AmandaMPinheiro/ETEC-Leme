#Amanda Maria Pinheiro 
#Programação e Algoritmos 
#1º DS 
#Última atualização: 03/07/2020
#Estrutura While - ex.2 

qtdade = 0 
soma = 0 
media = 0 

valor=float(input("Informe um valor para o cálculo:")) 

while valor > 0.0: 
    soma = soma + valor 
    qtdade = qtdade + 1 
    valor=float(input("Informe um valor para o cálculo:"))

media = soma / qtdade 
print("A soma dos valores é:" , soma) 
print("A quantidade de valores armazenados é:" , qtdade) 
print("A média calculada dos valores é:" , media)