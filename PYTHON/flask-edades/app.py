from flask import Flask, render_template, request

app = Flask(__name__)

def determinar_grupo_etario(edad):
    if edad < 18:
        return 'Menor de Edad'
    elif 18 <= edad < 60:
        return 'Adulto'
    else:
        return 'Adulto Mayor'

@app.route('/', methods=['GET', 'POST'])
def index():
    mensaje = ''

    if request.method == 'POST':
        try:
            edad = int(request.form['edad'])
            mensaje = determinar_grupo_etario(edad)
        except ValueError:
            mensaje = 'Por favor, introduce una edad válida.'

    return render_template('index.html', mensaje=mensaje)

if __name__ == '__main__':
    app.run(debug=True)
