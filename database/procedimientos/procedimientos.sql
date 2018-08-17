/* PROCEDIMIENTOS */

CREATE OR REPLACE FUNCTION public.cambiarfondosdeusuario(
	nuevosfondos integer,
	idu integer)
    RETURNS void
    LANGUAGE 'plpgsql'

    COST 100
    VOLATILE 
AS $BODY$

BEGIN

UPDATE users
SET fondos = nuevosFondos
WHERE users.id = idu;

END;

$BODY$;

ALTER FUNCTION public.cambiarfondosdeusuario(integer, integer)
    OWNER TO homestead;


CREATE OR REPLACE FUNCTION public.resta(
	vara integer,
	varb integer)
    RETURNS integer
    LANGUAGE 'plpgsql'

    COST 100
    VOLATILE 
AS $BODY$

BEGIN
	return (varA - varB);
END;

$BODY$;

ALTER FUNCTION public.resta(integer, integer)
    OWNER TO homestead;


CREATE OR REPLACE FUNCTION public.seleccionarusuario(
	idu integer)
    RETURNS character varying
    LANGUAGE 'plpgsql'

    COST 100
    VOLATILE 
AS $BODY$
     
DECLARE nombre char varying;
BEGIN     SELECT users.name into nombre FROM users
    WHERE users.id = idU;             
    RETURN nombre;
END;     

$BODY$;

ALTER FUNCTION public.seleccionarusuario(integer)
    OWNER TO homestead;
