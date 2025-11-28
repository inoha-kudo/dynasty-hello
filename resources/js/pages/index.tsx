import { HelloContent } from '@hello/components/hello-content';
import { Head } from '@inertiajs/react';

export default function Hello({ message }: { message: string }) {
    return (
        <>
            <Head title="Hello" />
            <HelloContent message={message} />
        </>
    );
}
