import React from 'react';
import ChatStream from "./ChatStream";

const StreamBlock = () => {
    return (
        <div className='stream-block'>
            <iframe className='stream-frame' src="https://www.youtube.com/embed/jfKfPfyJRdk?controls=0"
                    title="YouTube video player" frameBorder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowFullScreen></iframe>

            <ChatStream/>
        </div>
    );
};

export default StreamBlock;