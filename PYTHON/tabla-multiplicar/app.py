from flask import Flask, render_template, request

app = Flask(__name__)

def tabla_de_multiplicar(numero):
    tabla = []
    for i in range(1, 11):
        resultado = numero * i
        tabla.append(f'{numero} x {i} = {resultado}')
    return tabla

@app.route('/', methods=['GET', 'POST'])
def index():
    resultados = None

    if request.method == 'POST':
        try:
            numero = int(request.form['numero'])
            resultados = tabla_de_multiplicar(numero)
        except ValueError:
            resultados = 'Por favor, introduce un número entero válido.'

    return render_template('index_tabla.html', resultados=resultados)

if __name__ == '__main__':
    app.run(debug=True)
