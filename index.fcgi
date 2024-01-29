#!../../../.linuxbrew/bin/python3.9
import a2wsgi
from flup.server.fcgi import WSGIServer
import os
from app.main import app

if __name__ == '__main__':
    os.environ.setdefault("PATH_INFO", "")

    wsgi_app = a2wsgi.ASGIMiddleware(app)
    WSGIServer(wsgi_app).run()