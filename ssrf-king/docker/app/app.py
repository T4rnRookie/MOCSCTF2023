from flask import Flask,render_template,request
from urllib.request import urlopen
app = Flask(__name__)

@app.route("/")
def home():
    return render_template('index.html')

@app.route("/search")
def search():
    url = request.args.get("url")
    try:
        resp = urlopen(url)
        return resp.read()
    except Exception as e:
        return "need a normal and exist url"

if __name__ == '__main__':
    app.run()