-- Punto 10
-- Selecciona leads de Meta Ads de octubre 2025 con budget mayor a 1000
SELECT
    id,
    source,
    budget
FROM leads
WHERE
    source = 'Meta Ads'
    AND created_at >= '2025-10-01'
    AND created_at <= '2025-10-31'
    AND budget > 1000;

-- Punto 11
-- Calcula el promedio de budget de los leads del resultado anterior
SELECT
    AVG(budget) AS promedio_budget
FROM leads
WHERE
    source = 'Meta Ads'
    AND created_at >= '2025-10-01'
    AND created_at <= '2025-10-31'
    AND budget > 1000;

-- Punto 12
-- Agrupa eventos por nombre, cuenta cuántos hay de cada tipo y ordena de mayor a menor
SELECT
    event_name,
    COUNT(*) AS total_eventos
FROM events
ORDER BY total_eventos DESC;

-- Punto 13
-- Actualiza la contraseña del usuario "ceo" en wp_users
UPDATE wp_users
SET user_pass = MD5('NuevaContraseña123')
WHERE user_login = 'ceo';