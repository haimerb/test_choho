### stage 1 ###

# Use official node image as the base image
FROM node:10.15.3 as build

# Set the working directory
WORKDIR /app

COPY package.json /app

# Install all the dependencies
RUN npm cache clean --force
RUN npm install

# Add the source code to app
COPY . /app

# Generate the build of the application
RUN npm run build

### stage 2 ###

# Use official nginx image as the base image
FROM nginx:latest

# Copy the build output to replace the default nginx contents.
COPY --from=build /app/dist/frontend /usr/share/nginx/html

# Expose port 80
EXPOSE 80