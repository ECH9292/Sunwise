import React, { useContext } from "react";
import { FilterBar, PokemonList } from "../components";
import { PokemonContext } from "../context/PokemonContext";


export const HomePage =() => {
    const {onClickLoadMore} = useContext(PokemonContext)
    
    return (
        <>
        <PokemonList></PokemonList>
        <FilterBar></FilterBar>
        <div className="container-btn-load-more container">
                <button className='btn-load-more' onClick={onClickLoadMore}>
                    Cargar más
                </button>
            </div>
        </>
    )
}