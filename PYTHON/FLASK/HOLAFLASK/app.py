from flask import Flask

app = Flask(__name__)

@app.route('/')
def hola_mundo():
    return 'Hola Mundo'

@app.route('/saludo')
def saludo():
    return '¡Hola! Esta es la segunda ruta'

@app.route('/despedida')
def despedida():
    return '¡Hola! Esta es la tercera ruta'

if __name__ == '__main__':
    app.run(debug=True)
    
    

