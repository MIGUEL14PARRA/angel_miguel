from flask import Flask, render_template, request

app = Flask(__name__)

def calcular_ecuacion(x, z):
    y = x * z + z + x
    return y

@app.route('/', methods=['GET', 'POST'])
def index():
    resultado = None

    if request.method == 'POST':
        try:
            x = float(request.form['x'])
            z = float(request.form['z'])
            resultado = calcular_ecuacion(x, z)
        except ValueError:
            resultado = 'Por favor, introduce números válidos.'

    return render_template('index_ecuacion.html', resultado=resultado)

if __name__ == '__main__':
    app.run(debug=True)
