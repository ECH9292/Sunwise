import React from "react";
import styled from "styled-components";

export const Modal = ({children, shiny, changeShiny})=>{

    const ModalContainer = styled.div`
    width: 22%;
    height: 250px;
    background: #f2f2f2;
    position: absolute;
    `;

    return(
        <>
        {shiny &&
            <ModalContainer>
            {children}
        </ModalContainer>}
        </>
    )
}