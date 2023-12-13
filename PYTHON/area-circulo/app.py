from flask import Flask, render_template, request

app = Flask(__name__)

def calcular_area(figura, parametro1, parametro2=None):
    if figura == 'circulo':
        radio = float(parametro1)
        return 3.14159 * radio**2
    elif figura == 'cuadrado':
        lado = float(parametro1)
        return lado**2
    elif figura == 'triangulo':
        base = float(parametro1)
        altura = float(parametro2)
        return (base * altura) / 2
    else:
        return 'Figura no reconocida'

@app.route('/', methods=['GET', 'POST'])
def index():
    resultado = None

    if request.method == 'POST':
        try:
            figura = request.form['figura']
            parametro1 = request.form['parametro1']
            parametro2 = request.form['parametro2'] if 'parametro2' in request.form else None
            resultado = calcular_area(figura, parametro1, parametro2)
        except ValueError:
            resultado = 'Por favor, introduce valores numéricos válidos.'

    return render_template('index_areas.html', resultado=resultado)

if __name__ == '__main__':
    app.run(debug=True)
