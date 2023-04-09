import { Ring } from '@uiball/loaders'

export const Loader = ()=>{
    return(
        <div className="container.loader">
            <Ring 
            size={200}
            lineWeight={5}
            speed={2} 
            color="#f2f2f2" 
        />
        </div>
    )
}