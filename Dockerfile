FROM php:8.2-cli

WORKDIR /app

# Copia tudo
COPY . .

# Porta usada pelo Render
EXPOSE 10000

# Servidor embutido do PHP
CMD ["php", "-S", "0.0.0.0:10000", "-t", "public"]
