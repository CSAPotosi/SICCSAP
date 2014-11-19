//triggers del sistema
//aqui entrar todos los archivos del sistema de base de datos
create or replace function pseudo_fk_historial_costos() returns trigger as $$
begin
    if not exists(select * from servicio where id_servicio = new.id_servicio and tipo_servicio = new.tipo_servicio) then
        raise exception 'No existe servicio con id: %', new.id_servicio;
        return null;
    end if;
    return new;
end;
$$
language plpgsql;

drop trigger system_llave_foranea_historial_costos on historial_costo;
CREATE TRIGGER system_llave_foranea_historial_costos
BEFORE insert ON historial_costo
FOR EACH ROW EXECUTE PROCEDURE pseudo_fk_historial_costos();



//triggers de control de costos
create or replace function actualizar_costos()
returns trigger as $$
begin
  if NEW.monto <> OLD.monto then
    update historial_costo set fecha_fin=NOW() where id_historial_costo=NEW.id_historial_costo;
    insert into historial_costo (fecha_inicio,monto,id_servicio,tipo_servicio) values(NOW(),NEW.monto,NEW.id_servicio,NEW.tipo_servicio);
    return NULL;
  end if;
  return NEW;
end;
$$
language plpgsql;


drop trigger trigger_costo on historial_costo;
CREATE TRIGGER trigger_costo
BEFORE UPDATE ON historial_costo
    FOR EACH ROW EXECUTE PROCEDURE actualizar_costos();

