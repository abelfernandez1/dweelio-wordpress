/**
 * WordPress dependencies
 */
import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl, RangeControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

/**
 * Internal dependencies
 */
import './style.scss';
import './editor.scss';
import metadata from '../block.json';

/**
 * Register the block
 */
registerBlockType(metadata.name, {
    /**
     * @see ./edit.js
     */
    edit: ({ attributes, setAttributes }) => {
        const { uuid, height } = attributes;
        const blockProps = useBlockProps();

        return (
            <>
                <InspectorControls>
                    <PanelBody title={__('Dweelio Embed Settings', 'dweelio-embed')}>
                        <TextControl
                            label={__('UUID', 'dweelio-embed')}
                            value={uuid || ''}
                            onChange={(value) => setAttributes({ uuid: value })}
                            help={__('Enter the Dweelio UUID for the content you want to embed.', 'dweelio-embed')}
                        />
                        <RangeControl
                            label={__('Height', 'dweelio-embed')}
                            value={height || 500}
                            onChange={(value) => setAttributes({ height: value })}
                            min={200}
                            max={1000}
                            step={10}
                        />
                    </PanelBody>
                </InspectorControls>
                <div {...blockProps}>
                    {!uuid ? (
                        <p className="dweelio-embed-placeholder">
                            {__('Please enter a Dweelio UUID in the block settings.', 'dweelio-embed')}
                        </p>
                    ) : (
                        <div className="dweelio-embed-preview">
                            <p>{__('Dweelio Embed Preview', 'dweelio-embed')}</p>
                            <p>{__('UUID:', 'dweelio-embed')} {uuid}</p>
                            <p>{__('This will be replaced with the actual embed on the frontend.', 'dweelio-embed')}</p>
                        </div>
                    )}
                </div>
            </>
        );
    },

    /**
     * No save function needed as we're rendering server-side
     */
    save: () => null,
});