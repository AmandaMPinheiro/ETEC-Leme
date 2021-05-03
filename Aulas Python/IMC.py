#Amanda Maria Pinheiro 
#Programação e Algoritmos 
#1º DS 
#Última atualização: 19/06/2020
#Estruturas condicionais aninhadas 

print("Algoritmo para calcular o IMC e verificar a situação")

peso=float(input("Digite seu peso em Kg: "))
altura=float(input("Digite sua altura em metros: "))

imc= peso / (altura * altura) 
print("Seu IMC é: {0:0.2f}".format(imc))

if imc < 17: 
    print("Muito abaixo do peso")
elif (imc >= 17) and (imc < 18.5): 
    print("Abaixo do peso")
elif (imc >= 18.5) and (imc < 25): 
    print("Peso ideal")
elif (imc >= 25) and (imc < 30): 
    print("Sobrepeso") 
elif (imc >= 30) and (imc < 35): 
    print("Obesidade") 
elif (imc >= 35) and (imc < 40): 
    print("Obesidade severa") 
else: 
    print("Obesidade mórbita")