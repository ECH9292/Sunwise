import React, { useState } from "react";
import { Link } from "react-router-dom";
import { Modal } from "./Modal";

export const CardPokemon = ({pokemon})=>{
    const [Shiny, setShiny] = useState(false);

    return(
        <>
        <Link to={`/pokemon/${pokemon.id}`} className="card-pokemon">
            <div className='card-img'>
				<img
					src={pokemon.sprites.front_default}
					alt={`Pokemon ${pokemon.name}`}
                    onMouseOver={()=> setShiny(true)}
                    onMouseOut={()=> setShiny(false)}
				/>

        <Modal
            shiny = {Shiny}
            changeShiny={Shiny}
        ><img
					src={pokemon.sprites.front_shiny}
					alt={`Pokemon ${pokemon.name}`}
                    onMouseOver={()=> setShiny(true)}
                    onMouseOut={()=> setShiny(false)}
				/></Modal>

			</div>
			<div className='card-info'>
				<span className='pokemon-id'>N° {pokemon.id}</span>
				<h3>{pokemon.name}</h3>
				<div className='card-types'>
					{pokemon.types.map(type => (
						<span key={type.type.name} className={type.type.name}>
							{type.type.name}
						</span>
					))}
				</div>

                <div className='card-abilities'>
					{pokemon.abilities.map(ability => (
						<span key={ability.ability.name} className={ability.ability.name}>
							{ability.ability.name}
						</span>
					))}
				</div>
                
			</div>
        </Link>
        </>
    )
}