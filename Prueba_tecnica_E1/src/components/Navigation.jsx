import React, { useContext } from 'react';
import { Outlet, useNavigate } from 'react-router-dom';
import { PokemonContext } from '../context/PokemonContext';

export const Navigation = () => {

	const {onInputChange, valueSearch, onResetForm, active, setActive} = useContext(PokemonContext)
	const navigate = useNavigate()
	const onSearchSubmit = (e) => {
		e.preventDefault()
		navigate('/search', {
			state: valueSearch
		})

		onResetForm();
	}

	return (
		<>
			<header className='container'>
				<div className="container-filter container" onClick={() => setActive(!active)}>
					<div className="icon-filter">
					<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/57803d70-a2b0-4a96-ab23-f0c7384d1f2f/d4nsey6-c114e315-133d-471e-bcea-522f67d95fdd.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzU3ODAzZDcwLWEyYjAtNGE5Ni1hYjIzLWYwYzczODRkMWYyZlwvZDRuc2V5Ni1jMTE0ZTMxNS0xMzNkLTQ3MWUtYmNlYS01MjJmNjdkOTVmZGQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.hGuHxdvSkBKAOj2bB3nRHmzeePM5ZA39pvWVLKH7pXc"/>
					<span>filter</span>
            		</div>
				</div>
				
				<form onSubmit={onSearchSubmit}>
					<div className='form-group'>
						<input
						name='valueSearch'
							id=''
							value={valueSearch}
							onChange={onInputChange}
							placeholder='search...'
						/>
					</div>

					<button className='btn-search'>Search</button>
				</form>
			</header>

			<Outlet />
		</>
	);
};