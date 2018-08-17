/* TRIGGERS*/

CREATE FUNCTION public.actualizacionhistorial()
    RETURNS trigger
    LANGUAGE 'plpgsql'
    COST 100
    VOLATILE NOT LEAKPROOF 
AS $BODY$

BEGIN 
	INSERT INTO historialcompras(compra_id, "fechaCompra", "horaCompra",
								 "tipoCompra", "metodoDePago", monto, descripcion, created_at, updated_at)
	VALUES (NEW.id, current_date, localtime, 0, 0, NEW.monto, NEW.descripcion, localtimestamp, localtimestamp);
	RETURN NEW;
END;

$BODY$;

ALTER FUNCTION public.actualizacionhistorial()
    OWNER TO homestead;


CREATE FUNCTION public.actualizacionhistorialusuario()
    RETURNS trigger
    LANGUAGE 'plpgsql'
    COST 100
    VOLATILE NOT LEAKPROOF 
AS $BODY$

BEGIN 
	INSERT INTO historialusers(descripcion, "fechaHistorial", "horaHistorial",
								  created_at, updated_at)
	VALUES ('se agrego un usuario', current_date, localtime, localtimestamp, localtimestamp);
	RETURN NEW;
END;

$BODY$;

ALTER FUNCTION public.actualizacionhistorialusuario()
    OWNER TO homestead;


CREATE FUNCTION public.cambiofondos()
    RETURNS trigger
    LANGUAGE 'plpgsql'
    COST 100
    VOLATILE NOT LEAKPROOF 
AS $BODY$

BEGIN
	UPDATE users
	SET fondos = resta(fondos, NEW.monto)
	WHERE users.id = NEW.user_id;
	RETURN NEW;
END;

$BODY$;

ALTER FUNCTION public.cambiofondos()
    OWNER TO homestead;
