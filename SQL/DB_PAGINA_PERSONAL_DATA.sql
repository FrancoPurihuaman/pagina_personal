INSERT INTO `USUARIO_GRUPO` (`grupo_id`, `nombre`, `created`, `updated`) VALUES
(1, 'admnistrador', '2020-09-15', '2020-09-15'),
(2, 'invitado', '2020-09-15', '2020-09-15');

INSERT INTO `PERSONA` (`persona_id`, `nombre`, `apellidos`, `created`, `updated`) VALUES
(1, 'JUAN', 'ALVARADO TABOADA', '2020-09-15', '2020-09-15'),
(2, 'JORGE', 'ALARCON PEÑA JORGE', '2020-09-15', '2020-09-15');

INSERT INTO `USUARIO` (`usuario_id`, `usuario`, `password`, `estado`, `activo`, `created`, `updated`, `persona_id`, `grupo_id`) VALUES
(1, 'JUAN', 'JUAN', 0, 0, '2020-09-15', '2020-09-15', 1, 1),
(2, 'JORGE', 'JORGE', 0, 0, '2020-09-15', '2020-09-15', 2, 2);
