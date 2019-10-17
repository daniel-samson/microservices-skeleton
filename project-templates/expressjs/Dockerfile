FROM node:10
WORKDIR /home/node/app
ENV EXPRESSPATH /home/node/app
COPY microservice .
RUN npm install
EXPOSE 8000
CMD ["node", "/home/node/app/index.js"]