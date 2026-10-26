-- Actualización de contraseña para mirandadjmdjm@gmail.com (KORNisues)
UPDATE `users` 
SET `password` = '$2y$10$q6ipcMM5xqjd1qxq2NCvY.W.HRRsYJbOg9Xhe3rT70zkldltvSrZ6',
    `updated_at` = NOW()
WHERE `email` = 'mirandadjmdjm@gmail.com';

-- En caso de existir la cuenta alternativa previa
UPDATE `users` 
SET `password` = '$2y$10$q6ipcMM5xqjd1qxq2NCvY.W.HRRsYJbOg9Xhe3rT70zkldltvSrZ6',
    `updated_at` = NOW()
WHERE `email` = 'mierandadjmdjm@gmail.com';
