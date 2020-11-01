-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2017 a las 05:01:52
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

create database tareas;
-- con use le decimos a phpmyadmin que use esa base de datos
use tareas;

CREATE TABLE tareas (
id_tareas INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
titulo VARCHAR(250) NOT NULL,
descripcion text(250),
fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
