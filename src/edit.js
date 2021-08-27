import { __ } from "@wordpress/i18n";
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import "./editor.scss";

export default function Edit() {
	const blockProps = useBlockProps({
		className: "alignwide flow-space-lg",
	});
	return (
		<div {...blockProps}>
			<InnerBlocks allowedBlocks={["kd-flow/inner-content"]} />
		</div>
	);
}
