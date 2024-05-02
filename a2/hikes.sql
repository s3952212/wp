CREATE DATABASE hikesvictoria;

USE hikesvictoria;

CREATE TABLE hikes (
    hikeid INT SERIAL PRIMARY KEY,
    hikename VARCHAR(255) NOT NULL, 
    description TEXT, 
    caption VARCHAR(255), 
    distance DOUBLE, 
    level VARCHAR(255), 
    location VARCHAR(255),
    image TEXT 
);
