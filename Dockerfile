# Build frontend CSS
FROM node:22 AS frontend-builder
WORKDIR /app
COPY . /app
RUN yarn install && npx @tailwindcss/cli -i ./assets/style.css -o ./html/style.css

# Create appliation image
FROM php:8.4-apache
WORKDIR /var/www
COPY . /var/www
COPY --from=frontend-builder /app/html/style.css /var/www/html/style.css
