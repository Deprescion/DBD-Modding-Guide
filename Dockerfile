FROM python:3.12-slim AS builder

WORKDIR /app

COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

COPY . .

RUN mkdocs build --strict

FROM nginx:alpine

COPY --from=builder /app/site /usr/share/nginx/html

EXPOSE 80