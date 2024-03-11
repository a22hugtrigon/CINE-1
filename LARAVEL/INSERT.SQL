-- Insertar películas en la tabla peliculas
INSERT INTO peliculas (titulo, imagen_url, duracion, clasificacion, created_at, updated_at)
VALUES
  ('DUNE: PART2', 'ruta_de_imagen', 160, 5, NOW(), NOW()),
  ('Cualquiera menos tu', 'ruta_de_imagen', 103, 4, NOW(), NOW()),
  ('WONKA', 'ruta_de_imagen', 116, 2, NOW(), NOW()),
  ('MIGRACION', 'ruta_de_imagen', 82, 3, NOW(), NOW()),
  ('Sociedad de la nieve', 'ruta_de_imagen', 144, 5, NOW(), NOW());
-- Insertar usuarios en la tabla usuarios
INSERT INTO usuarios (nombre, apellido, telefono, correo, created_at, updated_at)
VALUES
  ('Ruben', 'De la Cereza', '123456789', 'ruben@gmail.com', NOW(), NOW()),
  ('Hugo', 'Tripiana', '987654321', 'hugo@gmail.com', NOW(), NOW()),
  ('Josu', 'Largo', '555555555', 'josu@gmail.com', NOW(), NOW());
  INSERT INTO sesiones (id_pelicula, fecha, hora, created_at, updated_at)
VALUES
  (1, '2024-03-15', '16:00:00', NOW(), NOW()),
  (1, '2024-03-19', '20:00:00', NOW(), NOW()),

  (2, '2024-03-16', '18:00:00', NOW(), NOW()),
  (2, '2024-03-18', '20:00:00', NOW(), NOW()),

  (3, '2024-03-17', '18:00:00', NOW(), NOW()),
  (3, '2024-03-17', '22:00:00', NOW(), NOW()),

  (4, '2024-03-18', '18:00:00', NOW(), NOW()),

  (5, '2024-03-19', '16:00:00', NOW(), NOW());