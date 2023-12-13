from flask import Flask, request

app = Flask(__name__)

def calcular_promedio(nota1, nota2, nota3):
    peso_nota1 = 0.3
    peso_nota2 = 0.3
    peso_nota3 = 0.4

    promedio_ponderado = (nota1 * peso_nota1) + (nota2 * peso_nota2) + (nota3 * peso_nota3)
    return f'El promedio ponderado es: {promedio_ponderado:.2f}'

@app.route('/')
def index():
    
        nota1 = float(request.args.get('nota1'))
        nota2 = float(request.args.get('nota2'))
        nota3 = float(request.args.get('nota3'))

        resultado = calcular_promedio(nota1, nota2, nota3)
        return resultado
   

if __name__ == '__main__':
    app.run(debug=True)




